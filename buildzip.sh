#!/usr/bin/env sh

echo "[+] Compressing for wordpress themes"
#zip -r -X -9 -x *.git* zenifywp.zip .

#git archive automatically ignores git folder as well as any gitignored files
git archive --format=zip HEAD -o zenifywp.zip
