import requests, json, re

url = 'http://127.0.0.1:7040'

# Toutes les commande qui vont être utilisé
size = { "action": "account_weight", "account": "replace" }
deleguateur_nombre = { "action": "delegators_count", "account": "replace" }
deleguateur_liste = { "action": "delegators", "account": "replace" }
balance = { "action": "account_balance", "account": "replace" }


# POST des commandes
x1 = requests.post(url, json = size)
x2 = requests.post(url, json = deleguateur_nombre)
x3 = requests.post(url, json = deleguateur_liste)
x4 = requests.post(url, json = balance)

# Convertion en texte
x1 = x1.text
x2 = x2.text
x3 = x3.text
x4 = x4.text

# Conversion en json
data1 = json.loads(x1)
data2 = json.loads(x2)
data3 = json.loads(x3)
data4 = json.loads(x4)

# Récupération des données
user1 = data1["weight"]
user2 = data2["count"]
user3 = data3["delegators"]
user4 = data4["balance"]

# Récupération des informations de la premiére adresse
ff1 = json.dumps(user3, indent=4, separators=(", ", " : "))
last = ff1[7:71]
one = user3[last]
one = int(one)
whaith = int(user1)
pOne = 100*one / whaith
nADD = 0
print(last + ": " + str(pOne) + "%")

# Envoye de l'argent à la premiére adresse
bal = (pOne / 100) * int(user4)
print(bal)

send = '{ "action": "send", "wallet": "replace", "source": "replace", "destination": "' + last + '", "amount": "' + str(bal) + '" }'
send = json.loads(send)
sending = requests.post(url, json = send)
sending = sending.text
print(sending)

# Boucle pour envoyer l'argent à toutes les adresses
while nADD < int(user2) - 1:

    recup = '{ "action": "delegators", "account": "replace", "start": "' + last + '", "count": "1" }'

    recup = json.loads(recup)
    request = requests.post(url, json = recup)
    request = request.text
    request = json.loads(request)
    request = request["delegators"]
    request = str(request)
    last = request[2:66]
    pour = user3[last]
    pour = int(pour)
    print("\n")
    pOne = 100*pour / whaith
    print(last + ": " + str(pOne) + "%")
    bal = (pOne / 100) * int(user4)
    print(bal)
    send = '{ "action": "send", "wallet": "replace", "source": "replace", "destination": "' + last + '", "amount": "' + str(bal) + '" }'
    send = json.loads(send)
    sending = requests.post(url, json = send)
    sending = sending.text
    print(sending)
    nADD += 1



