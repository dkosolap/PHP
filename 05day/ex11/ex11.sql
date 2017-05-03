SELECT UPPER(user_card.last_name) as "NAME", user_card.first_name, subscription.price
FROM member JOIN subscription ON member.id_sub=subscription.id_sub
JOIN user_card ON user_card.id_user = member.id_member
WHERE subscription.price > 42 ORDER BY user_card.last_name, user_card.first_name;