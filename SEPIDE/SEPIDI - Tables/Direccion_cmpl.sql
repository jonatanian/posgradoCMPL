USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Direccion_cmpl]    Script Date: 05/06/2017 09:16:31 a. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Direccion_cmpl](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[programa] [varchar](150) NULL,
	[alumno] [varchar](150) NULL,
	[titulo] [varchar](100) NULL,
	[lgac] [varchar](50) NULL,
	[estatus] [varchar](50) NULL,
	[fecha_limite] [date] NULL,
	[creador_id] [int] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


