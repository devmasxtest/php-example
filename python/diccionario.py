diccionario={}
cont=0
cont500=0

while cont<3:
    comercial=input("Dime el nombre del comercial--> ")
    total=int(input("Dime el total de ventas--> "))
    print("")
    if total<0 or comercial in diccionario:
        print("Datos incorrectos")
        print("")
    else:
        diccionario[comercial]=total
        print("Insertado correctamente")
        print("")
    if total > 500:
        cont500+=1
    cont += 1
if cont500>1:
    print("El numero de comerciales que tienen ventas superiores a 500 son: ",cont500)
    print("")

else:
    print("Solo hay",cont500,"comercial que tienen ventas superiores a 500")
    print("")
for comercial,total in diccionario.items():
    if total>500:
        print("Comercial:",comercial,":",total)
