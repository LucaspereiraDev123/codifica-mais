SELECT hospedagens.estado, COUNT(reservas.id_reserva) AS total, SUM(reservas.valor_noite * reservas.noites) 
AS soma_total_reservas 
FROM hospedagens
INNER JOIN reservas ON hospedagens.id_hospedagem = reservas.id_hospedagem
WHERE reservas.status_id = 2 AND reservas.deletado_em IS NOT NULL AND reservas.data_checkin <= "2025-06-01"
GROUP BY hospedagens.estado
ORDER BY total DESC, soma_total_reservas DESC;