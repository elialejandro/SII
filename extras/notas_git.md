# NOTAS GIT

Para actualizar desde el repositorio principal, descarga desde remoto/rama_remota hasta local/"rama en la que este"

``` 
$ git pull <remote> <rama_remota> 
```

con ```> git log ``` muestro los commits que tengo

```
git branch <nombre_rama> <entry_point>
```

``` entry_point ``` basta con los primeros 10 dígitos
luego ```$ git checkuot <nombre_rama>```

o

``` 
git checkout -b <nombre_rama> <entry_point> 
```

Permite borrar una rama
```
$ git branch -D <nombre_rama>
```

Mandar a traer los commits que tiene la rama_x
```
$ git checkout -t <repositorio> <rama>
```

Saber el estado del respositorio
```
$ git status
```

Preparar un nuevo commit
```
# Agrega un archivo al commit
$ git add <path archivo modificad>
# Se realiza el commit con un mensaje descriptivo
$ git commit -m "MENSAJE"
```

Subir cambios al servidor
```
git push origin master
```

Traer cambios del servidor
```
git pull origin master
```

mezcla la rama prueba en la rama en la que este actualmente (si quiero actualizar master primero me debo cambiar a esta)
```
git merge prueba
```

Para actualizar, sube a remoto/rama_remota desde local/"rama en la que este"

``` 
$ git push <remote> <rama_remota> 
```

