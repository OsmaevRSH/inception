FROM alpine:latest

RUN apk update
RUN apk add python3
COPY ./calculator.py .
COPY index.html .
RUN chmod +x /calculator.py
RUN mkdir /cgi-bin/
RUN mv ./calculator.py /cgi-bin/calculator.py

CMD [ "python3", "-m", "http.server", "--cgi" ]
