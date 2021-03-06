USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Conferencia]    Script Date: 23/05/2017 11:46:02 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Conferencia](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[fecha_inicio] [date] NULL,
	[fecha_termino] [date] NULL,
	[alcance] [varchar](150) NULL,
	[tema_participacion] [varchar](150) NULL,
	[nombre_programa] [varchar](150) NULL,
	[creador_id] [int] NULL,
	[updated_at] [datetime] NULL,
	[created_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


