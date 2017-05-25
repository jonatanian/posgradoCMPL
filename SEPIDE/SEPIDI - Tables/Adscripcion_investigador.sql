USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Adscripcion_investigador]    Script Date: 25/05/2017 11:02:08 a. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[Adscripcion_investigador](
	[investigador_id] [int] NULL,
	[adscripcion_id] [int] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
	[modified_by] [int] NULL
) ON [PRIMARY]

GO


