#!/bin/bash

# Nombre del script
SCRIPT_NAME="update_app.sh"

# Función para mostrar mensajes con formato
log_message() {
    echo "[$SCRIPT_NAME] $1"
}

# Verificar si el script se está ejecutando con permisos de superusuario
if [[ $EUID -ne 0 ]]; then
   log_message "Este script debe ejecutarse como root o usando sudo."
   exit 1
fi

# Dar de baja el servicio Docker
log_message "Deteniendo los contenedores de Docker..."
./vendor/bin/sail down
wait $!

# Hacer pull de los últimos cambios del repositorio
log_message "Actualizando el repositorio desde Git..."
git pull
if [ $? -ne 0 ]; then
    log_message "Error al actualizar el repositorio desde Git."
    exit 1
fi

# Levantar el servicio Docker
log_message "Levantando los contenedores de Docker..."
./vendor/bin/sail up -d
wait $!

# Verificar si hay nuevas dependencias de Composer y instalarlas
log_message "Instalando dependencias de Composer..."
./vendor/bin/sail composer install
if [ $? -ne 0 ]; then
    log_message "Error al instalar las dependencias de Composer."
    exit 1
fi
wait $!

# Verificar si hay nuevas dependencias de NPM y instalarlas
log_message "Instalando dependencias de NPM..."
./vendor/bin/sail npm install
if [ $? -ne 0 ]; then
    log_message "Error al instalar las dependencias de NPM."
    exit 1
fi
wait $!

# Ejecutar migraciones de base de datos (opcional, si aplicable)
log_message "Ejecutando migraciones de base de datos..."
./vendor/bin/sail artisan migrate --force
if [ $? -ne 0 ]; then
    log_message "Error al ejecutar las migraciones de base de datos."
    exit 1
fi
wait $!

log_message "Actualización completada con éxito."

# Salir del script
exit 0

