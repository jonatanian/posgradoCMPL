USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Adscripcion]    Script Date: 25/05/2017 11:01:19 a. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Adscripcion](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nombre] [varchar](50) NULL,
	[created_at] [datetime] NULL,
	[updated_at] [int] NULL,
	[modified_by] [int] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


