ARG BASE_IMAGE
FROM $BASE_IMAGE

ENV NVM_DIR=/usr/local/nvm
ENV NODE_VERSION=v14.18.2
ENV NVM_VERSION=0.39.1

RUN curl -sL https://raw.githubusercontent.com/nvm-sh/nvm/v${NVM_VERSION}/install.sh -o install_nvm.sh
RUN mkdir -p ${NVM_DIR} && bash install_nvm.sh
RUN echo "source ${NVM_DIR}/nvm.sh" >> /etc/profile
RUN bash -ic "nvm install ${NODE_VERSION} && nvm use ${NODE_VERSION}"
RUN chmod -R ugo+w ${NVM_DIR}
