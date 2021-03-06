/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ft_lstiter.c                                       :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: afillion <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2015/12/01 16:15:25 by afillion          #+#    #+#             */
/*   Updated: 2016/02/12 13:28:28 by afillion         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include "includes/libft.h"

void		ft_lstiter(t_list *lst, void (*f)(t_list *elem))
{
	t_list	*backup;

	if (lst == NULL || f == NULL)
		return ;
	while (lst)
	{
		backup = lst->next;
		f(lst);
		lst = backup;
	}
}
