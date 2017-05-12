USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Proyecto]    Script Date: 09/05/2017 04:48:51 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Proyecto](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nombre_proyecto] [varchar](150) NULL,
	[financiamiento_id] [int] NULL,
	[otro] [varchar](50) NULL,
	[programa] [varchar](150) NULL,
	[estatus] [varchar](20) NULL,
	[fecha_presentacion] [date] NULL,
	[fecha_vencimiento] [date] NULL,
	[fecha_vigencia_inicio] [date] NULL,
	[fecha_vigencia_fin] [date] NULL,
	[fecha_notificacion] [date] NULL,
	[monto_total] [float] NULL,
	[monto_p2] [float] NULL,
	[monto_p3] [float] NULL,
	[monto_p5] [float] NULL,
	[creador_id] [int] NULL,
	[estimulos] [float] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


