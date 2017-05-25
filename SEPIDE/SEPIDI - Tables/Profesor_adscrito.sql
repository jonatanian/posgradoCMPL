USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Profesor_adscrito]    Script Date: 25/05/2017 11:04:21 a. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Profesor_adscrito](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[profesor_adscrito] [varchar](150) NULL,
	[investigador_id] [int] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


