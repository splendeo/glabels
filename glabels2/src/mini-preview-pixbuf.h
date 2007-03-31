/* -*- Mode: C; tab-width: 8; indent-tabs-mode: nil; c-basic-offset: 8 -*- */

/*
 *  (GLABELS) Label and Business Card Creation program for GNOME
 *
 *  mini-preview-pixbuf.h:  mini-preview pixbuf module header file
 *
 *  Copyright (C) 2006  Jim Evins <evins@snaught.com>.
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA
 */

#ifndef __MINI_PREVIEW_PIXBUF_H__
#define __MINI_PREVIEW_PIXBUF_H__


#include <gdk-pixbuf/gdk-pixbuf.h>
#include <libglabels/template.h>

G_BEGIN_DECLS

GdkPixbuf *gl_mini_preview_pixbuf_new (glTemplate *template,
				       gint        width,
				       gint        height);

G_END_DECLS

#endif