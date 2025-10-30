SELECT hospedes.id_hospede, hospedes.nome_completo, COUNT(reservas.id_reserva) AS total_reservas_comfirmadas,
MIN(reservas.data_checkin) AS primeiro_checkin, MAX(reservas.data_checkout) AS ultimo_checkin
FROM hospedes
JOIN reservas ON hospedes.id_hospede = reservas.id_hospede
WHERE reservas.status_id = 2 AND reservas.deletado_em IS NOT NULL
GROUP BY hospedes.id_hospede, hospedes.nome_completo, reservas.data_checkin;
