# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.

Vagrant.configure(2) do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://atlas.hashicorp.com/search.
  config.vm.box = "debian/stretch64"
  config.vm.box_check_update = true

  # hotfix for tty warning
  # ref: https://github.com/mitchellh/vagrant/issues/1673
  config.ssh.shell = "bash -c 'BASH_ENV=/etc/profile exec bash'"

  # zenify wordpress default vagrant box
  config.vm.define "zenifywp", primary: true do |zwp|

    zwp.vm.provider "virtualbox" do |vb|
      vb.memory = "1024"
      vb.name = "zenifywp-devenv"
    end

    zwp.vm.hostname = "zwp.local"
    zwp.vm.network "forwarded_port", guest: 80, host: 8080
    zwp.vm.network "private_network", ip: "192.168.10.10", netmask: "255.255.255.0", auto_config: true

    zwp.vm.provision "shell", path: "vmsharefiles/vm.bootstrap.sh"

    zwp.vm.synced_folder "vmsharefiles", "/vagrant_data"
    zwp.vm.synced_folder "vmsharesource", "/usr/share/nginx/html/wordpress/wp-content/themes"
  end

  # after provisioning, sync the wordpress folder, which is named source

  #config.vm.synced_folder "vmsharesource/zenifywp", "/usr/share/nginx/html/wordpress/wp-content/themes/devwptheme"
  #config.vm.synced_folder "vmsharesource/zenifywp-child", "/usr/share/nginx/html/wordpress/wp-content/themes/devwpthemechild"

end
