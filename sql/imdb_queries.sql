SELECT * FROM movies
WHERE year LIKE '1995';

SELECT COUNT(*) from roles r 
JOIN movies m on r.movie_id=m.id
WHERE m.name='Lost in Translation' 

SELECT a.id, a.first_name, a.last_name from roles r 
JOIN movies m on r.movie_id=m.id 
JOIN actors a on a.id=r.actor_id 
WHERE m.name='Lost in Translation'

SELECT d.first_name d.last_name  FROM directors d
JOIN movies_directors md ON md.director_id = d.id
JOIN movies m ON m.id= md.movie_id 
WHERE m.name= 'Fight Club'


SELECT COUNT(m.name) FROM directors d 
JOIN movies_directors md ON md.director_id = d.id 
JOIN movies m ON m.id= md.movie_id 
WHERE d.first_name= 'Clint' AND d.last_name='Eastwood'

SELECT m.name FROM directors d 
JOIN movies_directors md ON md.director_id = d.id 
JOIN movies m ON m.id= md.movie_id 
WHERE d.first_name= 'Clint' AND d.last_name='Eastwood'

SELECT d.first_name, d.last_name FROM directors d 
JOIN movies_directors md ON md.director_id = d.id 
JOIN movies m ON m.id= md.movie_id 
JOIN directors_genres dg ON dg.director_id=d.id
WHERE dg.genre='Horror'

SELECT a.first_name, a.last_name FROM directors d 
JOIN movies_directors md ON md.director_id = d.id 
JOIN movies m ON m.id= md.movie_id 
JOIN roles r ON r.movie_id= m.id
JOIN actors a ON a.id=r.actor_id
WHERE  d.first_name='Christopher' AND d.last_name='Nolan'
