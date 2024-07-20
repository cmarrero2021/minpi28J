import re
import random

# Expresión regular
regex = r'^04(12|14|16|24|26)\d{7}$'

# Generar 8000 números
numbers = []
for _ in range(8000):
    # Generar un número aleatorio que cumpla con la expresión regular
    while True:
        num = f'04{random.choice(["12", "14", "16", "24", "26"])}{random.randint(0, 9999999):07d}'
        if re.match(regex, num):
            numbers.append(num)
            break

# Guardar los números en un archivo de texto
with open('numeros.txt', 'w') as file:
    file.write(','.join(numbers))

print(f'Se han generado y guardado {len(numbers)} números en el archivo "numeros.txt".')
