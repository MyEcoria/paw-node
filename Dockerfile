FROM ubuntu:latest
RUN apt update -y && apt upgrade -y && apt install jq wget curl nano screen -y && apt clean
RUN wget https://github.com/paw-digital/paw-node/releases/latest/download/linux-paw_node -O paw_node
RUN chmod +x paw_node
RUN mkdir Paw
RUN wget https://raw.githubusercontent.com/MyEcoria/paw-node/main/config/config-rpc.toml -O Paw/config-rpc.toml
RUN wget https://raw.githubusercontent.com/MyEcoria/paw-node/main/config/config-node.toml -O Paw/config-node.toml
RUN cat Paw/config-node.toml
RUN cat Paw/config-rpc.toml
ENTRYPOINT ["/bin/sh" "-c" "./paw_node --daemon --data_path=Paw"]
EXPOSE map[9999/tcp:{}]
EXPOSE map[7045/tcp:{}]
EXPOSE map[7046/tcp:{}]
