FROM ubuntu:latest
CMD ["bash"]
RUN apt update -y && apt upgrade -y && apt install jq wget curl nano screen -y && apt clean
RUN wget https://cdn.discordapp.com/attachments/875771260083257366/897922579728330873/nano_node -O ana_node
RUN chmod +x ana_node
RUN mv ana_node /bin/
WORKDIR /root
USER root
RUN mkdir Ana
ENTRYPOINT ana_node --daemon --data_path=/root/Ana/
