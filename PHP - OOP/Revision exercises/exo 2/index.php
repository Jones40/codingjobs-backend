
SELECT * 
FROM playlist p
INNER JOIN users u ON p.user_id = u.user_id;



SELECT * FROM songs s
INNER JOIN artists a
on s.artist_id = a.artist_id"
where a.artist_id = 2 ;

SELECT categ_id, title, COUNT(song_id) as NumberOfSongs
FROM songs s
INNER JOIN categories c on c.categ_id = s.categ_id
GROUP BY categ_id;



