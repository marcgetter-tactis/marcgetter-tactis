ARG BASE_IMAGE
FROM $BASE_IMAGE

ENV MYSQL_TUNER_VERSION=1.8.3

RUN curl -L#O https://github.com/major/MySQLTuner-perl/archive/${MYSQL_TUNER_VERSION}.tar.gz && \
tar xvf ${MYSQL_TUNER_VERSION}.tar.gz && cd MySQLTuner-perl-${MYSQL_TUNER_VERSION} && cp mysqltuner.pl /usr/local/bin/mysqltuner
