#!/usr/bin/env sh

echo "[+] Compressing for wordpress themes"
#zip -r -X -9 -x *.git* zenifywordpress.zip .
git archive --format=zip HEAD -o zenifywp.zip
