
SELECT anfitrioes.nome_completo, COUNT(hospedagens.id_anfitriao) AS quantidade 
FROM anfitrioes
JOIN hospedagens ON anfitrioes.id_anfitriao = hospedagens.id_anfitriao
GROUP BY anfitrioes.nome_completo;



