let serverURLs = {
    "localdev": {
        "NODE_SERVER": "http://localhost",
         "ROOT_DIR":"/var/www/html",
        "NODE_SERVER_PORT": "9292",
        "MYSQL_HOST": 'localhost',
        "MYSQL_USER": 'root',
        "MYSQL_PASSWORD": '123',
        'MYSQL_DATABASE': 'bagpackar',
        "EMAIL_USER": 'bagpackar1@gmail.com',
        "EMAIL_PASS": 'Bagpackar@123',
        "EMAIL_HOST": 'smtp.gmail.com',
        "EMAIL_PORT": "465",
        "EMAIL_SECURE": true,
        "EMAIL_TLS": true
    },
    "serverdev": {
        "NODE_SERVER": "https://bagpackar.com",
        "ROOT_DIR":"/var/www/html",
        "NODE_SERVER_PORT": "3637",
        "MYSQL_HOST": 'localhost',
        "MYSQL_USER": 'root',
        "MYSQL_PASSWORD": 'u7(k@!KA<b',
        'MYSQL_DATABASE': 'bagpackar_storage',
        "EMAIL_USER": 'bagpackar1@gmail.com',
        "EMAIL_PASS": 'Bagpackar@123',
        "EMAIL_HOST": 'smtp.gmail.com',
        "EMAIL_PORT": "465",
        "EMAIL_SECURE": true,
        "EMAIL_TLS": true
    }
    
}

module.exports = {
    serverURLs: serverURLs
}