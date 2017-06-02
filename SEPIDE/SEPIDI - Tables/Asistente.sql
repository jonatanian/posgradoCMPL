USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Asistente]    Script Date: 02/06/2017 10:21:22 a. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Asistente](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[asistente] [varchar](50) NULL,
	[indicador] [int] NULL,
	[indicador_id] [int] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


