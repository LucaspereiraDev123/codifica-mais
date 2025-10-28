SELECT hospedagens.cidade, 
AVG((reservas.valor_noite * reservas.noites)
 + reservas.taxa_limpeza + reservas.taxa_servico - reservas.desconto)
AS media FROM reservas
JOIN hospedagens ON reservas.id_hospedagem = hospedagens.id_hospedagem
WHERE reservas.status_id = 2
GROUP BY hospedagens.cidade;





