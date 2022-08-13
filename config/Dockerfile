FROM debian:latest
CMD ["bash"]
RUN apt update -y && apt upgrade -y && apt install jq wget curl nano screen -y && apt clean
RUN wget https://github.com/paw-digital/paw-node/releases/download/v1.6/linux-paw_node -O paw_node
RUN chmod +x paw_node
RUN mv paw_node /bin/
WORKDIR /root
USER root
RUN mkdir Paw
ADD https://raw.githubusercontent.com/MyEcoria/paw-node/main/config/config-rpc.toml Paw/
ADD https://raw.githubusercontent.com/MyEcoria/paw-node/main/config/config-node.toml Paw/
ENTRYPOINT paw_node --daemon --data_path=/root/Paw/
