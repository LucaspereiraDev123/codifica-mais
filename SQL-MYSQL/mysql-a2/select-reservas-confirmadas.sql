SELECT status_id, data_checkin, deletado_em 
FROM reservas 
WHERE data_checkin > "2025-05-01" AND status_id = 2 AND deletado_em IS NULL;