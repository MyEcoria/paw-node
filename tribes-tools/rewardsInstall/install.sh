#!/bin/bash

apt install python3 python3-pip cron nano wget curl -y
python3 -m pip install requests

read -p 'Url: ' url
read -p 'Trible wallet : ' twallet
read -p 'Wallet ID : ' idwallet
read -p 'Commission wallet : ' cwallet
read -p 'Pourcentage commission : ' pcom

# Téléchargement du fichier:
wget "https://myecoria.com/tribleGenerator/?submit=submit&url=${url}&wallet=${twallet}&walletId=${idwallet}&walletCom=${cwallet}&pourCom=${pcom}" -O ~/rewardBot.py
