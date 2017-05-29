USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Indicador_estudiante]    Script Date: 29/05/2017 09:48:10 a. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Estudiante_indicador](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[estudiante] [varchar](150) NULL,
	[indicador] [int] NULL,
	[indicador_id] [int] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


