from flask import Flask, request, jsonify

app = Flask(__name__)

# Datos de usuarios para simular la autenticación
usuarios = {
    'usuario1': 'contraseña1',
    'usuario2': 'contraseña2'
}

@app.route('/registro', methods=['POST'])
def registro():
    datos = request.get_json()
    usuario = datos.get('usuario')
    contraseña = datos.get('contraseña')
    
    if usuario in usuarios:
        return jsonify({'mensaje': 'El usuario ya existe'}), 400
    else:
        usuarios[usuario] = contraseña
        return jsonify({'mensaje': 'Registro exitoso'}), 200

@app.route('/inicio_sesion', methods=['POST'])
def inicio_sesion():
    datos = request.get_json()
    usuario = datos.get('usuario')
    contraseña = datos.get('contraseña')
    
    if usuario in usuarios and usuarios[usuario] == contraseña:
        return jsonify({'mensaje': 'Autenticación satisfactoria'}), 200
    else:
        return jsonify({'mensaje': 'Error en la autenticación'}), 401

if __name__ == '__main__':
    app.run(debug=True)
