FROM ubuntu:latest
CMD ["bash"]
RUN /bin/sh -c apt update -y && apt upgrade -y && apt install jq wget curl nano screen -y && apt clean
RUN /bin/sh -c wget https://github.com/paw-digital/paw-node/releases/latest/download/linux-paw_node -O paw_node
RUN /bin/sh -c chmod +x paw_node
RUN /bin/sh -c mkdir Paw
RUN /bin/sh -c wget https://raw.githubusercontent.com/MyEcoria/paw-node/main/config/config-rpc.toml -O Paw/config-rpc.toml
RUN /bin/sh -c wget https://raw.githubusercontent.com/MyEcoria/paw-node/main/config/config-node.toml -O Paw/config-node.toml
RUN /bin/sh -c cat Paw/config-node.toml
RUN /bin/sh -c cat Paw/config-rpc.toml
ENTRYPOINT ["/bin/sh" "-c" "./paw_node --daemon --data_path=Paw"]
EXPOSE map[9999/tcp:{}]
EXPOSE map[7045/tcp:{}]
EXPOSE map[7046/tcp:{}]
