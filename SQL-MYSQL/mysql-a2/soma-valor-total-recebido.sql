SELECT SUM((reservas.valor_noite * reservas.noites) + reservas.taxa_servico + reservas.taxa_limpeza
 - reservas.desconto) AS valor_diaria 
FROM reservas
WHERE reservas.deletado_em IS NULL;
