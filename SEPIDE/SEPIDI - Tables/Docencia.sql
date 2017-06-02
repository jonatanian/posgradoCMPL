USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Docencia]    Script Date: 02/06/2017 01:52:06 a. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Docencia](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[fecha_inicio] [date] NULL,
	[fecha_termino] [date] NULL,
	[tipo_alcance] [varchar](50) NULL,
	[asignaturas] [varchar](500) NULL,
	[creador_id] [int] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


