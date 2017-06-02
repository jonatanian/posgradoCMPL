USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Servicio]    Script Date: 02/06/2017 09:45:31 a. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Servicio](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[servicio] [varchar](50) NULL,
	[alcance] [varchar](50) NULL,
	[fecha_inicio] [date] NULL,
	[fecha_termino] [date] NULL,
	[nombre_servicio] [varchar](150) NULL,
	[organizacion] [varchar](150) NULL,
	[tipo_registro] [varchar](50) NULL,
	[otro_registro] [varchar](50) NULL,
	[registro] [varchar](50) NULL,
	[costo] [float] NULL,
	[asistentes] [varchar](500) NULL,
	[creador_id] [int] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [date] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


