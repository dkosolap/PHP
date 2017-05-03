UPDATE ft_table
SET creation_date = ADDDATE(creation_date, interval +20 year)
WHERE id > 5;