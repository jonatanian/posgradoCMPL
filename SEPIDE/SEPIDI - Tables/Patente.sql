USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Patente]    Script Date: 17/05/2017 12:28:27 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Patente](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nombre_patente] [varchar](150) NULL,
	[estatus] [varchar](5) NULL,
	[fecha_forma] [date] NULL,
	[fecha_fondo] [date] NULL,
	[fecha_notificacion] [date] NULL,
	[registro] [varchar] (5) NULL,
	[creador_id] [int] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


