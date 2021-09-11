# Author :
* ambroiselebs

_# how to install it :

```
> git clone https://github.com/ambroiselebs/streamingapi
> Setup a database and connect it in the includes/dbh.inc.php file
```

##### The databse need to contain :

```
id : int(11) primary auto_increment
iframe : varchar(258)
```

# How to use it :

##### Add an episode : 

```
> Put the iframe code in the iframe field (the id will complete itself)
> The buttons must point to example.php?id=the_id_you_want
```

##### Example : 

```
id = 1
iframe = <iframe src=https://movie.com/dzdDQDzdqd.html/>


<a href="example.php?id=1"><button>Episode 1</button></a>
```
