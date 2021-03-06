/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   floor.c                                            :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: afillion <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/11/19 21:37:12 by afillion          #+#    #+#             */
/*   Updated: 2016/11/19 21:37:13 by afillion         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include "wolf.h"

void	ft_floor(t_env *e)
{
	if (e->side == 0 && e->ray_dir_x > 0)
	{
		e->floor_wall_x = e->map_x;
		e->floor_wall_y = e->map_y + e->wall_x;
	}
	else if (e->side == 0 && e->ray_dir_x < 0)
	{
		e->floor_wall_x = e->map_x + 1.0;
		e->floor_wall_y = e->map_y + e->wall_x;
	}
	else if (e->side == 1 && e->ray_dir_y > 0)
	{
		e->floor_wall_x = e->map_x + e->wall_x;
		e->floor_wall_y = e->map_y;
	}
	else
	{
		e->floor_wall_x = e->map_x + e->wall_x;
		e->floor_wall_y = e->map_y + 1.0;
	}
}
