USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Publicacion]    Script Date: 12/05/2017 01:54:34 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Publicacion](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nombre_publicacion] [varchar](150) NULL,
	[tipo] [varchar](50) NULL,
	[alcance] [varchar](15) NULL,
	[medio_publicacion] [varchar](50) NULL,
	[otro] [varchar](50) NULL,
	[fecha_aceptacion] [date] NULL,
	[fecha_publicacion] [date] NULL,
	[creador_id] [int] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


