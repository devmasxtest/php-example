
lista_entero = [1,2,2,5,9,7,8,0,9,2]
cont = 0

def lista(lista_entero, numeroentero):
    cont = 0
    for i in lista_entero:
        if i == numeroentero:
            cont += 1
    if cont >= 2:
      return True
    else:
        return False

res = lista(lista_entero, 0)

if res==True:
    print("Esta mas de dos veces")
else:
    print("NO Esta mas de dos veces")
print(res)
