USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Software]    Script Date: 25/05/2017 11:03:32 a. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Software](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[descripcion] [varchar](250) NULL,
	[fecha_inicio] [date] NULL,
	[fecha_termino] [date] NULL,
	[registro] [varchar](50) NULL,
	[estatus] [varchar](10) NULL,
	[fecha_aprobacion] [date] NULL,
	[area_aplicacion] [varchar](150) NULL,
	[creador_id] [int] NULL,
	[updated_at] [datetime] NULL,
	[created_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


