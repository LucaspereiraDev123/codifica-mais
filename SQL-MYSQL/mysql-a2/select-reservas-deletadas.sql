SELECT hospedes.nome_completo, anfitrioes.nome_completo, hospedagens.titulo, reservas.deletado_em
FROM hospedes, anfitrioes, hospedagens, reservas
WHERE reservas.deletado_em IS NOT NULL;