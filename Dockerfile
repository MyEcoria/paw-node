FROM ubuntu:latest
CMD ["bash"]
RUN apt update -y && apt upgrade -y && apt install jq wget curl nano screen -y && apt clean
RUN wget https://github.com/paw-digital/paw-node/releases/download/v1.5/linux-paw_node -O paw_node
RUN chmod +x paw_node
RUN mkdir Paw
RUN wget https://raw.githubusercontent.com/MyEcoria/paw-node/main/config/config-rpc.toml -O Paw/config-rpc.toml
RUN wget https://raw.githubusercontent.com/MyEcoria/paw-node/main/config/config-node.toml -O Paw/config-node.toml
RUN cat Paw/config-rpc.toml
RUN cat Paw/config-node.toml
ENTRYPOINT ./paw_node --daemon --data_path=Paw
