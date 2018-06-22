# NOTAS GIT

Para actualizar desde el repositorio principal

``` 
$ git pull origin master 
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
