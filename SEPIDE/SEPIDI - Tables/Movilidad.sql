USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Movilidad]    Script Date: 24/05/2017 06:11:52 a. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Movilidad](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[tipo] [varchar](50) NULL,
	[alumno] [varchar](100) NULL,
	[nombre_programa] [varchar](150) NULL,
	[fecha_inicio] [date] NULL,
	[fecha_termino] [date] NULL,
	[alcance] [varchar](50) NULL,
	[institucion_destino] [varchar](150) NULL,
	[creador_id] [int] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


