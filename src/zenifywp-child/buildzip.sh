#/usr/bin/env bash

echo "[+] Compressing for Wordpress"
#zip -r -X -9 -x *.git* zenifywordpress-child.zip .
git archive --format=zip HEAD -o zenifywp-child.zip
