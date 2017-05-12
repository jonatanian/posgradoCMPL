USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Financiamiento]    Script Date: 09/05/2017 04:56:48 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Financiamiento](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nombre_financiamiento] [varchar](50) NULL,
	[tipo] [varchar](15) NULL,
	[updated_at] [datetime] NULL,
	[created_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


