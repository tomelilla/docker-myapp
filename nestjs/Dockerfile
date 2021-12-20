FROM node:lts-alpine3.12

WORKDIR /usr/src/app

RUN apk update \
    && npm install -g npm \
	&& npm install -g typescript \
	&& npm install -g ts-node \
    && apk add yarn \
    && yarn global add @nestjs/cli

# COPY package*.json ./
# COPY . .
# RUN yarn

EXPOSE 3000

CMD ["yarn"]
# CMD ["yarn start:dev"]
CMD ["/bin/ash"]