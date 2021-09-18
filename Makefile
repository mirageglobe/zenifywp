
# === info ===

# reference - https://www.gnu.org/software/make/manual/html_node/Standard-Targets.html

# notes
# - use $$ for escaping variable
# - use - to ignore errors (make)
# - use @ to not print the command

# === targets ===

# menu tool > core targets
MENU := env build test deploy run

# menu tool > helper targets
MENU := env-core build-init build-core test-init test-core deploy-init deploy-core

# menu helpers targets
MENU := version vinit vpatch vminor vmajor help

# load phony
# info - phony is used to make sure there is no similar file(s) such as <target> that cause the make recipe not to work
.PHONY: all clean test $(MENU)

# === variables ===

# set default target
.DEFAULT_GOAL := help

# # set default shell to use
# SHELL := /bin/bash

# sets all lines in the recipe to be passed in a single shell invocation
# ref - https://www.gnu.org/software/make/manual/html_node/One-Shell.html
.ONESHELL:

# === main ===

##@ Menu

# core commands

env: env-core 												# prime environment for project
	@echo ":: prime environment for project - ok ::"

build: build-init	build-core					# build project
	@echo ":: build project - ok ::"

test: test-init test-core 						# test project
	@echo ":: test project - ok ::"

deploy: deploy-init	deploy-core				# deploy project
	@echo ":: deploy project - ok ::"

run:																	# run project (as daemon if permits)
	@echo ":: run project - ok ::"

up:																		## spin up project (vagrant)
	@echo ":: spin up - ok ::"
	vagrant up
	# vagrant rsync-auto

down:																	## tear down project (vagrant)
	@echo ":: tear down - ok ::"
	vagrant destroy

refresh:															## refresh/reload project (vagrant)
	@echo ":: refresh - ok ::"
	vagrant reload --provision
	@echo "browse to : http://192.168.10.10/ or http://localhost:8080/"

# helper commands

env-core:
	@echo ":: env ::"
	@echo ":: checking environment variables ::"
	@echo ":: checking build dependancies ::"
	@command -v node || echo "missing node"
	@command -v semver || echo "missing semver"
	@command -v shellcheck || echo "missing shellcheck"
	@command -v bats || echo "missing bats-core"
	@echo ":: checking environment variables ::"
	# export $(cat .env | xargs) 				# loaded env files into current environment

build-init:
	@echo ":: build-init ::"

test-init:
	@echo ":: test-init ::"

test-core:
	@echo ":: test-core ::"
	bats -r test/*
	shellcheck src/*.sh

deploy-init:
	@echo ":: deploy-init ::"

deploy-core:
	@echo ":: deploy-core ::"
	bats -r test/*

##@ Helpers

help:												## display this help
	@awk 'BEGIN { FS = ":.*##"; printf "\nUsage:\n  make \033[36m<target>\033[0m\n"; } \
		/^[a-zA-Z0-9_-]+:.*?##/ { printf "  \033[36m%-30s\033[0m %s\n", $$1, $$2; } \
		/^##@/ { printf "\n\033[1m%s\033[0m\n", substr($$0, 5); } \
		END { printf "\n"; }' $(MAKEFILE_LIST)

# notes
# $(MAKEFILE_LIST) is an environment variable (name of Makefile) thats available during Make.
# FS = awks field separator. use it in the beginning of execution. i.e. FS = ","
