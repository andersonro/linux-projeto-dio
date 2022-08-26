#!/bin/bash

echo "Atualizando"
apt-get update
apt-get upgrade -y
echo "Instalando o Apache"
apt-get install apache2 -y
echo "Instalando unzip"
apt-get install unzip -y
echo "Baixando a aplicação"
cd /tmp
wget CAMINHO_DA_APLICACAO #EXEMPLO https://github.com/....
echo "Descompactando arquivo"
unizip ARQUIVO.zip
echo "Acessando o diretorio descompactado"
cd DIRETORIO_DESCOMPACTADO
echo "Copiando o conteúdo da aplicação para o diretório do servidor web"
cp -R * /var/www/html/
echo "Não esquecer da permissão de execução do arquivo (chmod +x ARQUIVO.sh)"
echo "FINALIZADO"


