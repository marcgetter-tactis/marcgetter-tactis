ARG BASE_IMAGE
FROM $BASE_IMAGE

ENV ACLI_VERSION=1.25.1
ENV NVM_DIR=/usr/local/nvm
ENV NODE_VERSION=v14.19.1
ENV NVM_VERSION=0.39.1

RUN curl -sLO https://github.com/acquia/cli/releases/download/${ACLI_VERSION}/acli.phar && \
chmod +x acli.phar && mv acli.phar /usr/local/bin/acli
RUN curl -sL https://raw.githubusercontent.com/nvm-sh/nvm/v${NVM_VERSION}/install.sh -o install_nvm.sh
RUN mkdir -p ${NVM_DIR} && bash install_nvm.sh
RUN echo "source ${NVM_DIR}/nvm.sh" >> /etc/profile
RUN bash -ic "nvm install ${NODE_VERSION} && nvm use ${NODE_VERSION}"
RUN chmod -R ugo+w ${NVM_DIR}
